@extends('frontend.app')

@section('title', 'Terms of Service')

@section('content')
    <div class="container my-5">
        <h1>Terms of Service</h1>
        <p><strong>Effective Date:</strong> [Insert Date]</p>

        <h3>1. Introduction</h3>
        <p>
            Welcome to {{ config('app.name') }} ("we," "our," or "us"). These Terms of Service govern your use of our
            website, products, and services
            (collectively, the "Services"). By using the Services, you agree to comply with and be bound by these Terms. If
            you do not agree to these
            Terms, you should not use our Services.
        </p>

        <h3>2. Use of Services</h3>
        <ul>
            <li>You must be at least 18 years old to use our Services. By using our Services, you represent that you have
                the legal capacity to enter into these Terms.</li>
            <li>You agree to provide accurate and complete information when creating an account or using our Services.</li>
            <li>You are responsible for maintaining the confidentiality of your account and password.</li>
        </ul>

        <h3>3. Prohibited Activities</h3>
        <ul>
            <li>Violating any laws or regulations.</li>
            <li>Infringing on the intellectual property rights of others.</li>
            <li>Transmitting harmful or malicious code.</li>
            <li>Engaging in fraudulent, deceptive, or illegal activities.</li>
            <li>Hacking, data mining, or unauthorized access to our systems.</li>
        </ul>

        <h3>4. Intellectual Property</h3>
        <p>
            All content, trademarks, logos, and intellectual property provided through the Services are owned by
            {{ config('app.name') }} or its licensors.
            You may not use, reproduce, distribute, or modify any of our intellectual property without prior written
            consent.
        </p>

        <h3>5. User-Generated Content</h3>
        <p>You retain ownership of any content you submit through the Services. However, by submitting content, you grant us
            a worldwide, non-exclusive,
            royalty-free license to use, reproduce, distribute, and display your content.</p>

        <p>You are solely responsible for the content you post, and you represent that you have the right to submit it.</p>

        <h3>6. Termination</h3>
        <p>We may terminate or suspend your access to the Services at any time, without notice, for any reason, including
            violations of these Terms.</p>

        <h3>7. Limitation of Liability</h3>
        <p>To the fullest extent permitted by law, {{ config('app.name') }} and its affiliates shall not be liable for any
            direct, indirect, incidental,
            consequential, or punitive damages arising out of or in connection with your use of the Services.</p>

        <h3>8. Indemnification</h3>
        <p>You agree to indemnify and hold {{ config('app.name') }} harmless from any claims, damages, losses, or expenses,
            including legal fees, arising out
            of your use of the Services or any violation of these Terms.</p>

        <h3>9. Modifications</h3>
        <p>We may update these Terms from time to time. Any changes will be posted on this page, and your continued use of
            the Services after the changes
            are made constitutes acceptance of the revised Terms.</p>

        <h3>10. Governing Law</h3>
        <p>These Terms are governed by and construed in accordance with the laws of [Your Country/State], without regard to
            its conflict of law principles.</p>
    </div>
@endsection
