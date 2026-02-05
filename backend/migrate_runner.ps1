$migrationPath = "database/migrations"
$files = Get-ChildItem -Path $migrationPath -File | Sort-Object Name
$failed = @()

Write-Host "Iniciando ejecución de migraciones..."

foreach ($file in $files) {
    Write-Host "Ejecutando: $($file.Name)"
    php artisan migrate --path="$migrationPath/$($file.Name)" --force
    
    if ($LASTEXITCODE -ne 0) {
        Write-Host "FALLO: $($file.Name). Se reintentará al final." -ForegroundColor Red
        $failed += $file
    } else {
        Write-Host "EXITO: $($file.Name)" -ForegroundColor Green
    }
}

Write-Host "`n---------------------------------------------------"
Write-Host "Reintentando migraciones fallidas..."
Write-Host "---------------------------------------------------"

foreach ($file in $failed) {
    Write-Host "Reintentando: $($file.Name)"
    php artisan migrate --path="$migrationPath/$($file.Name)" --force
}

Write-Host "Proceso completado."
