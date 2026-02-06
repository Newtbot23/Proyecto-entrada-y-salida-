<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class PricingController extends Controller
{
    /**
     * Get all pricing plans.
     */
    public function index(): JsonResponse
    {
        $plans = [
            [
                'id' => 'basic',
                'name' => 'Basic',
                'price' => '$19',
                'period' => '/mo',
                'description' => 'Essential features for individuals.',
                'features' => [
                    ['text' => '1 User Account', 'included' => true],
                    ['text' => '10 Projects', 'included' => true],
                    ['text' => 'Basic Analytics', 'included' => true],
                    ['text' => '24/7 Support', 'included' => false],
                    ['text' => 'Advanced Integrations', 'included' => false],
                ],
                'button_text' => 'Select Basic',
                'is_popular' => false,
            ],
            [
                'id' => 'pro',
                'name' => 'Professional',
                'price' => '$49',
                'period' => '/mo',
                'description' => 'Power and flexibility for growing teams.',
                'features' => [
                    ['text' => '5 User Accounts', 'included' => true],
                    ['text' => 'Unlimited Projects', 'included' => true],
                    ['text' => 'Advanced Analytics', 'included' => true],
                    ['text' => 'Priority Support', 'included' => true],
                    ['text' => 'Advanced Integrations', 'included' => false],
                ],
                'button_text' => 'Select Professional',
                'is_popular' => true,
            ],
            [
                'id' => 'enterprise',
                'name' => 'Enterprise',
                'price' => '$99',
                'period' => '/mo',
                'description' => 'Full-scale solutions for large organizations.',
                'features' => [
                    ['text' => 'Unlimited Users', 'included' => true],
                    ['text' => 'Unlimited Projects', 'included' => true],
                    ['text' => 'Custom Analytics', 'included' => true],
                    ['text' => 'Dedicated Support Agent', 'included' => true],
                    ['text' => 'Custom Integrations', 'included' => true],
                ],
                'button_text' => 'Contact Us',
                'is_popular' => false,
            ],
        ];

        return response()->json($plans);
    }

    /**
     * Select a pricing plan.
     */
    public function select(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'plan_id' => 'required|string',
        ]);

        return response()->json([
            'message' => 'Plan selected successfully',
            'plan_id' => $validated['plan_id'],
        ]);
    }
}
