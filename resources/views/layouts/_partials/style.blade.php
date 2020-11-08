<!-- Required meta tags -->
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;" />

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{asset('/bootstrap-4.4.1-dist/css/bootstrap.min.css')}}" />
<link rel="stylesheet" href="{{asset('/bootstrap-4.4.1-dist/css/bootstrap-grid.min.css')}}" />
<link rel="stylesheet" href="{{asset('/bootstrap-4.4.1-dist/css/bootstrap-reboot.min.css')}}" />

<!-- Main css -->
<link rel="stylesheet" href="{{asset('/css/style.css')}}?key=<?php echo date('d-M-y'); ?>" />

@stack('styles')
