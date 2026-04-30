@extends('frontend.layouts.app')
@vite('resources/scss/frontend/base/reset.scss')
@section('title', 'Cardiac Risk Assessment')

@section('content')
@include('frontend.welcome_page.header')

<section class="service-page-six">
    <div class="service-container-six">

        <div class="service-header-six">
            <h1>Cardiac Risk Assessment</h1>
            <p>Evaluating the risk of future heart disease.</p>
        </div>

        <div class="service-card-six">

            <p>
                Cardiac risk assessment is an essential process in identifying individuals
                who may be at risk of developing cardiovascular diseases. By analyzing
                various health indicators and lifestyle factors, this assessment helps
                detect potential problems before they become serious.
            </p>

            <p>
                Early identification of risk allows healthcare providers to recommend
                preventive measures, lifestyle modifications, and medical interventions
                that significantly reduce the chances of heart-related complications.
            </p>

            <h4>Purpose of Risk Assessment</h4>

            <p>
                The primary goal of cardiac risk assessment is to evaluate an individual's
                overall cardiovascular health and determine the likelihood of future heart
                disease. This proactive approach enables timely intervention and better
                long-term health outcomes.
            </p>

            <p>
                It is especially important for individuals with existing risk factors or
                a family history of heart disease.
            </p>

            <h4>Assessment Includes</h4>

            <ul>
                <li>Detailed medical history evaluation</li>
                <li>Blood pressure measurement and tracking</li>
                <li>Cholesterol and lipid profile analysis</li>
                <li>Blood sugar and diabetes screening</li>
                <li>Evaluation of lifestyle habits and daily routines</li>
                <li>Assessment of genetic and family history factors</li>
            </ul>

            <h4>Risk Factors Considered</h4>

            <p>
                Several key risk factors are analyzed during the assessment process.
                Understanding these factors helps in developing an effective prevention plan.
            </p>

            <ul>
                <li>High blood pressure (hypertension)</li>
                <li>High cholesterol levels</li>
                <li>Smoking and tobacco use</li>
                <li>Obesity and lack of physical activity</li>
                <li>Diabetes and metabolic conditions</li>
                <li>Stress and unhealthy lifestyle habits</li>
            </ul>

            <h4>Benefits of Early Assessment</h4>

            <p>
                Identifying risk at an early stage allows for timely action, which can
                prevent the progression of cardiovascular disease. Patients benefit from
                improved health outcomes and reduced need for complex treatments.
            </p>

            <ul>
                <li>Early detection of potential heart issues</li>
                <li>Reduced risk of heart attack and stroke</li>
                <li>Better management of existing conditions</li>
                <li>Improved quality of life and longevity</li>
            </ul>

            <h4>Personalized Care Approach</h4>

            <p>
                Each patient receives a personalized risk assessment based on their
                unique health profile. This ensures that recommendations are tailored
                to individual needs and are both practical and effective.
            </p>

            <p>
                Our specialists work closely with patients to explain results clearly
                and provide actionable guidance for improving heart health.
            </p>

            <h4>Follow-Up and Monitoring</h4>

            <p>
                Ongoing monitoring is an important part of cardiac risk management.
                Regular follow-ups help track progress and make necessary adjustments
                to treatment or lifestyle plans.
            </p>

            <ul>
                <li>Routine health evaluations</li>
                <li>Progress tracking and reassessment</li>
                <li>Continuous support and guidance</li>
            </ul>

            <h4>Our Commitment</h4>

            <p>
                We are committed to helping individuals understand their heart health
                and take proactive steps to reduce risk. Through comprehensive assessment
                and patient-centered care, we aim to prevent cardiovascular diseases
                before they develop.
            </p>

            <p>
                With a focus on prevention and education, our goal is to support
                healthier communities and long-term well-being.
            </p>

        </div>

    </div>
</section>

@include('frontend.welcome_page.footer')
@endsection