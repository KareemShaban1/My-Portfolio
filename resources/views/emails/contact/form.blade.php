@component('mail::message')
    # Contact Form Submission

    **Name:** {{ $data['name'] }}
    **Email:** {{ $data['email'] }}
    **Subject:** {{ $data['subject'] }}

    **Message:**
    {{ $data['message'] }}
@endcomponent
