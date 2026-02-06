export interface PlanFeature {
    text: string;
    included: boolean;
}

export interface PricingPlan {
    id: string;
    name: string;
    price: string;
    period: string;
    description: string;
    features: PlanFeature[];
    is_popular?: boolean;
    button_text: string;
}
