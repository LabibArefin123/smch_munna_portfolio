@extends('frontend.layouts.app')
@vite('resources/scss/frontend/base/reset.scss')
@section('title', 'Preventive Cardiology')
@section('content')
    @include('frontend.welcome_page.header')

    <section class="service-page-five">
        <div class="service-container-five">

            <div class="service-header-five">
                <h1>Preventive Cardiology</h1>
                <p>Preventing heart disease through early care and lifestyle management.</p>
            </div>

            <div class="service-card-five">

                <p>
                    Preventive cardiology is focused on reducing the risk of cardiovascular diseases
                    before they develop or progress into serious conditions. By identifying risk factors
                    early and implementing appropriate lifestyle and medical interventions, patients
                    can significantly improve their heart health and overall quality of life.
                </p>

                <p>
                    Our approach emphasizes education, awareness, and proactive care. We work closely
                    with patients to understand their health status and guide them toward making
                    informed decisions that support long-term cardiovascular wellness.
                </p>

                <h4>Understanding Preventive Cardiology</h4>

                <p>
                    Many heart conditions develop over time due to factors such as poor diet,
                    lack of physical activity, stress, and genetic predisposition. Preventive
                    cardiology aims to address these issues early, reducing the likelihood of
                    heart attacks, strokes, and other complications.
                </p>

                <p>
                    Through regular monitoring and timely intervention, it is possible to detect
                    warning signs and take corrective action before significant damage occurs.
                </p>

                <h4>Key Focus Areas</h4>

                <ul>
                    <li>Identification of cardiovascular risk factors</li>
                    <li>Development of personalized lifestyle plans</li>
                    <li>Routine health screenings and assessments</li>
                    <li>Cholesterol and blood pressure management</li>
                    <li>Diabetes prevention and control</li>
                </ul>

                <h4>Risk Factor Management</h4>

                <p>
                    Managing risk factors is a critical aspect of preventive cardiology. These
                    factors may include high blood pressure, high cholesterol, obesity, smoking,
                    and sedentary lifestyle habits.
                </p>

                <p>
                    By addressing these risks early, patients can significantly reduce their chances
                    of developing serious cardiovascular conditions in the future.
                </p>

                <h4>Healthy Lifestyle Planning</h4>

                <p>
                    A heart-healthy lifestyle is one of the most effective ways to prevent
                    cardiovascular disease. Our specialists provide practical guidance to help
                    patients adopt healthier daily habits.
                </p>

                <ul>
                    <li>Balanced and nutritious diet planning</li>
                    <li>Regular physical activity and exercise routines</li>
                    <li>Weight management strategies</li>
                    <li>Stress reduction techniques</li>
                    <li>Avoidance of tobacco and harmful substances</li>
                </ul>

                <h4>Regular Health Screening</h4>

                <p>
                    Routine health screenings play a vital role in early detection. These screenings
                    help monitor key health indicators and identify potential issues before they
                    become serious.
                </p>

                <ul>
                    <li>Blood pressure monitoring</li>
                    <li>Cholesterol level testing</li>
                    <li>Blood sugar evaluation</li>
                    <li>Cardiovascular risk assessment</li>
                </ul>

                <h4>Long-Term Benefits</h4>

                <p>
                    Preventive cardiology not only reduces the risk of heart disease but also improves
                    overall health and longevity. Patients who actively engage in preventive care
                    often experience better energy levels, improved mental well-being, and enhanced
                    quality of life.
                </p>

                <p>
                    Investing in prevention today can help avoid complex medical treatments and
                    complications in the future.
                </p>

                <h4>Our Commitment</h4>

                <p>
                    We are committed to promoting heart health through education, prevention, and
                    continuous support. Our team works with patients at every stage to ensure they
                    receive the guidance and care needed to maintain a healthy heart.
                </p>

                <p>
                    With a proactive and patient-focused approach, we aim to build a healthier
                    future by preventing cardiovascular diseases before they begin.
                </p>

            </div>

        </div>
    </section>

    @include('frontend.welcome_page.footer')
@endsection
