<!-- Required Meta Tags Always Come First -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Title -->
<title>Dashboard | Front - Admin &amp; Dashboard Template</title>

<!-- Favicon -->
<link rel="shortcut icon" href="./favicon.ico">

<!-- Font -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

<!-- CSS Implementing Plugins -->
<link rel="stylesheet" href="{{ asset('static/vendor/bootstrap-icons/font/bootstrap-icons.css') }}">

<link rel="stylesheet" href="{{ asset('static/vendor/daterangepicker/daterangepicker.css') }}">
<link rel="stylesheet" href="{{ asset('static/vendor/tom-select/dist/css/tom-select.bootstrap5.css') }}">
<link rel="stylesheet" href="{{asset('static/vendor/quill/dist/quill.snow.css')}}">

<!-- CSS Front Template -->

<link rel="preload" href="{{ asset('static/css/theme.min.css') }}" data-hs-appearance="default" as="style">
<link rel="preload" href="{{ asset('static/css/theme-dark.min.css') }}" data-hs-appearance="dark" as="style">

<style data-hs-appearance-onload-styles>
    * {
        transition: unset !important;
    }

    body {
        opacity: 0;
    }
</style>

<script>
    window.hs_config = {
        "autopath": "@@autopath",
        "deleteLine": "hs-builder:delete",
        "deleteLine:build": "hs-builder:build-delete",
        "deleteLine:dist": "hs-builder:dist-delete",
        "previewMode": false,
        "startPath": "/",
        "vars": {
            "themeFont": "https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap",
            "version": "?v=1.0"
        },
        "layoutBuilder": {
            "extend": {
                "switcherSupport": true
            },
            "header": {
                "layoutMode": "default",
                "containerMode": "container-fluid"
            },
            "sidebarLayout": "default"
        },
        "themeAppearance": {
            "layoutSkin": "default",
            "sidebarSkin": "default",
            "styles": {
                "colors": {
                    "primary": "#377dff",
                    "transparent": "transparent",
                    "white": "#fff",
                    "dark": "132144",
                    "gray": {
                        "100": "#f9fafc",
                        "900": "#1e2022"
                    }
                },
                "font": "Inter"
            }
        },
        "languageDirection": {
            "lang": "en"
        },
        "skipFilesFromBundle": {
            "dist": ["./static/js/hs.theme-appearance.js", "./static/js/hs.theme-appearance-charts.js",
                "./static/js/demo.js"
            ],
            "build": ["./static/css/theme.css",
                "./static/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside-mini-cache.js",
                "./static/js/demo.js", "./static/css/theme-dark.css", "./static/css/docs.css",
                "./static/vendor/icon-set/style.css", "./static/js/hs.theme-appearance.js",
                "./static/js/hs.theme-appearance-charts.js",
                "node_modules/chartjs-plugin-datalabels/dist/chartjs-plugin-datalabels.min.js",
                "./static/js/demo.js"
            ]
        },
        "minifyCSSFiles": ["./static/css/theme.css", "./static/css/theme-dark.css"],
        "copyDependencies": {
            "dist": {
                "./static/js/theme-custom.js": ""
            },
            "build": {
                "./static/js/theme-custom.js": "",
                "node_modules/bootstrap-icons/font/*fonts/**": "./static/css"
            }
        },
        "buildFolder": "",
        "replacePathsToCDN": {},
        "directoryNames": {
            "src": "./src",
            "dist": "./dist",
            "build": "./build"
        },
        "fileNames": {
            "dist": {
                "js": "theme.min.js",
                "css": "theme.min.css"
            },
            "build": {
                "css": "theme.min.css",
                "js": "theme.min.js",
                "vendorCSS": "vendor.min.css",
                "vendorJS": "vendor.min.js"
            }
        },
        "fileTypes": "jpg|png|svg|mp4|webm|ogv|json"
    }
    window.hs_config.gulpRGBA = (p1) => {
        const options = p1.split(',')
        const hex = options[0].toString()
        const transparent = options[1].toString()

        var c;
        if (/^#([A-Fa-f0-9]{3}){1,2}$/.test(hex)) {
            c = hex.substring(1).split('');
            if (c.length == 3) {
                c = [c[0], c[0], c[1], c[1], c[2], c[2]];
            }
            c = '0x' + c.join('');
            return 'rgba(' + [(c >> 16) & 255, (c >> 8) & 255, c & 255].join(',') + ',' + transparent + ')';
        }
        throw new Error('Bad Hex');
    }
    window.hs_config.gulpDarken = (p1) => {
        const options = p1.split(',')

        let col = options[0].toString()
        let amt = -parseInt(options[1])
        var usePound = false

        if (col[0] == "#") {
            col = col.slice(1)
            usePound = true
        }
        var num = parseInt(col, 16)
        var r = (num >> 16) + amt
        if (r > 255) {
            r = 255
        } else if (r < 0) {
            r = 0
        }
        var b = ((num >> 8) & 0x00FF) + amt
        if (b > 255) {
            b = 255
        } else if (b < 0) {
            b = 0
        }
        var g = (num & 0x0000FF) + amt
        if (g > 255) {
            g = 255
        } else if (g < 0) {
            g = 0
        }
        return (usePound ? "#" : "") + (g | (b << 8) | (r << 16)).toString(16)
    }
    window.hs_config.gulpLighten = (p1) => {
        const options = p1.split(',')

        let col = options[0].toString()
        let amt = parseInt(options[1])
        var usePound = false

        if (col[0] == "#") {
            col = col.slice(1)
            usePound = true
        }
        var num = parseInt(col, 16)
        var r = (num >> 16) + amt
        if (r > 255) {
            r = 255
        } else if (r < 0) {
            r = 0
        }
        var b = ((num >> 8) & 0x00FF) + amt
        if (b > 255) {
            b = 255
        } else if (b < 0) {
            b = 0
        }
        var g = (num & 0x0000FF) + amt
        if (g > 255) {
            g = 255
        } else if (g < 0) {
            g = 0
        }
        return (usePound ? "#" : "") + (g | (b << 8) | (r << 16)).toString(16)
    }
</script>




<script src="{{ asset('static/js/hs.theme-appearance.js') }}"></script>
<script src="{{ asset('static/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside-mini-cache.js') }}">
</script>
