# Resumen del Refactor de la Página de Precios (React + Laravel)

Este documento detalla los cambios realizados para integrar el frontend de React con el backend de Laravel.

## 1. Backend (Laravel)

### Instalación de API
- Se ejecutó `php artisan install:api` para preparar Laravel para manejar rutas API.

### Controlador (`backend/app/Http/Controllers/Api/PricingController.php`)
- Se creó este controlador nuevo.
- **Método `index()`**: Devuelve el array de planes en formato JSON. Se definieron los datos fijos (hardcoded) aquí como única fuente de verdad.
- **Método `select()`**: Recibe un `plan_id` y devuelve una respuesta de éxito.
- **Nota importante**: Las claves del array (como `is_popular`, `button_text`) se definieron en `snake_case` para seguir las convenciones de Laravel.

### Rutas (`backend/routes/api.php`)
- Se definieron dos rutas nuevas:
  - `GET /plans`: Apunta a `PricingController@index` para obtener los planes.
  - `POST /plans/select`: Apunta a `PricingController@select` para procesar la selección del plan.

---

## 2. Frontend (React)

### Tipos (`frontend/src/types/plans.ts`)
- Se actualizó la interfaz `PricingPlan`.
- Se cambiaron las propiedades de `camelCase` a `snake_case` (ej. `isPopular` -> `is_popular`, `buttonText` -> `button_text`) para coincidir exactamente con la respuesta JSON que envía Laravel.

### Servicio (`frontend/src/services/planService.ts`)
- Se eliminaron los datos simulados (mock data).
- Se implementó `fetch` para llamar al backend real:
  - `getPricingPlans` ahora hace un GET a `http://127.0.0.1:8000/api/plans`.
  - `sendSelectedPlan` ahora hace un POST a `http://127.0.0.1:8000/api/plans/select` enviando el `plan_id`.

### Componentes (`frontend/src/components/Plans/PlanCard.tsx`)
- Se actualizó el componente para leer las nuevas propiedades en `snake_case`.
- Ejemplo: Se cambió `plan.isPopular` por `plan.is_popular` y `plan.buttonText` por `plan.button_text` en el JSX.

---

## 3. Ejecución

Para ver los cambios funcionando:
1. **Backend**: Abrir terminal en `/backend` y ejecutar `php artisan serve`.
2. **Frontend**: Abrir terminal en `/frontend` y ejecutar `npm run dev`.
3. Navegar a `http://localhost:5173`.
