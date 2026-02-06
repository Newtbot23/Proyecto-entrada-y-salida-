import React from 'react';
import styles from './Plans.module.css';
import type { PlanFeature } from '../../types/plans';

interface PlanFeaturesProps {
    features: PlanFeature[];
}

const CheckIcon = () => (
    <svg
        className={`${styles.icon} ${styles.iconCheck}`}
        fill="none"
        viewBox="0 0 24 24"
        stroke="currentColor"
        strokeWidth={2}
    >
        <path strokeLinecap="round" strokeLinejoin="round" d="M5 13l4 4L19 7" />
    </svg>
);

const CrossIcon = () => (
    <svg
        className={`${styles.icon} ${styles.iconCross}`}
        fill="none"
        viewBox="0 0 24 24"
        stroke="currentColor"
        strokeWidth={2}
    >
        <path strokeLinecap="round" strokeLinejoin="round" d="M6 18L18 6M6 6l12 12" />
    </svg>
);

export const PlanFeatures: React.FC<PlanFeaturesProps> = ({ features }) => {
    return (
        <ul className={styles.features}>
            {features.map((feature, index) => (
                <li
                    key={index}
                    className={`${styles.featureItem} ${!feature.included ? styles.disabled : ''}`}
                >
                    {feature.included ? <CheckIcon /> : <CrossIcon />}
                    <span>{feature.text}</span>
                </li>
            ))}
        </ul>
    );
};
