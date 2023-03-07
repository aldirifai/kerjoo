<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

        <style>
            .w-100 {
                width: auto !important;
            }

            @media (max-width: 1200px) {
                .w-100 {
                    width: 100% !important;
                }

                .w-50 {
                    width: 50% !important;
                }
            }

            @media (max-width: 768px) {
                .w-50 {
                    width: 100% !important;
                }
            }
        </style>
</head>

<body>

    <div class="container h-100">
        <div class="my-5 row">
            <div class="col-12">
                <div class="flex-wrap flex-lg-nowrap d-flex">
                    <div class="mb-3 d-flex w-100">
                        <button class="btn btn-primary me-2">Tambah</button>
                        <button class="btn btn-primary me-2">Import</button>
                        <button class="btn btn-primary me-2">Export</button>
                    </div>

                    <input type="text" class="mb-3 form-control w-50" placeholder="Search">

                    <select class="mb-3 form-select w-50">
                        <option selected>Tahun</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
