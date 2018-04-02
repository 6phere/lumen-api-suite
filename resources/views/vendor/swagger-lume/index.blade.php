<!-- HTML for static distribution bundle build -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{config('swagger-lume.api.title')}}</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ swagger_lume_asset('swagger-ui.css') }}" >
    <link rel="icon" type="image/png" href="{{ swagger_lume_asset('favicon-32x32.png') }}" sizes="32x32" />
    <link rel="icon" type="image/png" href="{{ swagger_lume_asset('favicon-16x16.png') }}" sizes="16x16" />
    
    <style>
    
        html
        {
            box-sizing: border-box;
            overflow: -moz-scrollbars-vertical;
            overflow-y: scroll;
            font-family: 'Roboto', sans-serif;
        }
        *,
        *:before,
        *:after
        {
            box-sizing: inherit;
        }

        body {
            margin:0;
            background: #fafafa;
        }

        .swagger-ui .topbar, .scheme-container
        {
            display: none;
        }

        .information-container
        {
            height: 400px;
            margin: 0px;
            padding: 0px;
            max-width: inherit !important;
            background:
                url('http://sixphere.com/wp-content/uploads/2018/03/logo-1.png'),
                linear-gradient(-60deg,#718792,#000000);
            background-position: center;
            background-repeat: no-repeat;
        }

        .information-container .info
        {
            margin: 0px;
        }

        .title small, span.url, pre.version
        {
            display: none !important;
        }

        .information-container .block
        {
            position: relative;
            bottom: -325px;
            text-align: center;
        }

        .information-container .block .title
        {
            color: #FFFFFF;
            font-size: 40px;
            font-family: 'Roboto', sans-serif;
            font-weight: 300;
        }

        section.block-desktop
        {
            max-width: inherit !important;
            width: 90% !important;
            margin-top: 50px !important;
            margin: auto;
        }

        .swagger-ui .opblock.opblock-post
        {
            border: none;
            box-shadow: none;
            border-radius: 0px;
        }

        .swagger-ui .opblock .opblock-section-header
        {
            box-shadow: none;
        }

        .swagger-ui .btn, .swagger-ui .opblock-body select
        {
            border-radius: 0px;
            border: 1px solid gray;
            box-shadow: none;
        }

        .swagger-ui .response-col_description__inner div.markdown, .swagger-ui 
        .response-col_description__inner div.renderedMarkdown
        {
            border-radius: 0px;
            font-family: 'Roboto', sans-serif;
            font-style: normal;
        }

    </style>

</head>

<body>

<div id="swagger-ui"></div>

<script src="{{ swagger_lume_asset('swagger-ui-bundle.js') }}"> </script>
<script src="{{ swagger_lume_asset('swagger-ui-standalone-preset.js') }}"> </script>
<script>
    window.onload = function() {
        // Build a system
        const ui = SwaggerUIBundle({
            dom_id: '#swagger-ui',

            url: "{!! $urlToDocs !!}",
            operationsSorter: {!! isset($operationsSorter) ? '"' . $operationsSorter . '"' : 'null' !!},
            configUrl: {!! isset($additionalConfigUrl) ? '"' . $additionalConfigUrl . '"' : 'null' !!},
            validatorUrl: {!! isset($validatorUrl) ? '"' . $validatorUrl . '"' : 'null' !!},
            oauth2RedirectUrl: "{{ route('swagger-lume.oauth2_callback') }}",

            presets: [
                SwaggerUIBundle.presets.apis,
                SwaggerUIStandalonePreset
            ],

            plugins: [
                SwaggerUIBundle.plugins.DownloadUrl
            ],

            layout: "StandaloneLayout"
        })

        window.ui = ui
    }
</script>
</body>

</html>
