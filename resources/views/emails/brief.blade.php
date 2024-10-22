
@if ($brief_type == 'brief-style')
  @include('emails.mail-brief-styles')
@endif 
@if ($brief_type == 'brief')
  @include('emails.mail-brief')
@endif
@if ($brief_type == 'brief-seo')
  @include('emails.mail-brief-seo')
@endif