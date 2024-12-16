@extends('base')

@section('title', 'Categories')

@section('library-css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
@endsection

@section('content')
<style>
        body {
            background: linear-gradient(to bottom, #e0f7fa, #ffffff);
            font-family: sans-serif;
        }

        .judging-header {
            text-align: center;
            color: #003366;
            font-size: 1.8rem; 
            font-weight: bold; 
            text-decoration: underline;
        }

     
        ul {
            list-style-type: square;
            padding-left: 40px;
        }

        ul li {
            position: relative;
            padding-left: 25px;
            margin: 5px 0;
        }

        ul li::before {
            font-weight: 900;
            position: absolute;
            left: 0;
            color: #007bff;
        }

        .criteria-table th {
            background-color: #343a40;
            color: white;
        }

        .criteria-table tr:hover {
            background-color: #f1f1f1;
        }

        .table-header {
            background-color: #007bff;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container my-5">
        <div class="judging-header mb-4">
            <h1 class="text-center mt-5 mb-2" style="font-size: 1.8rem; font-weight: bold; text-decoration: underline;">JUDGING CRITERIA</h1>
        </div>

        <div>
            <h5><b>1. Judging will be done onsite by the judges, based on:</b></h5>
            <ul >
                <li>Intonation</li>
                <li>Vocal Quality</li>
                <li>Fidelity to Score</li>
                <li>Artistic Impression</li>
            </ul>
        </div>

        <div class="my-5">
            <h5><b>2. Judging will use a numerical system as follows:</b></h5>
            <table class="text-center table table-striped table-bordered criteria-table">
                <thead>
                    <tr>
                        <th>Total Points</th>
                        <th>Achievement</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>60-69.99</td>
                        <td>Bronze Medal</td>
                    </tr>
                    <tr>
                        <td>70-79.99</td>
                        <td>Silver Medal</td>
                    </tr>
                    <tr>
                        <td>80-100</td>
                        <td>Gold Medal</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="my-5">
            <h5><b>3. Judge’s Score Sheet:</b></h5>

            <!-- Section A: Score Sheet (2 songs) -->
            <h5>a. Score Sheet (2 songs)</h5>
            <table class=" text-center table table-striped table-bordered criteria-table">
                <thead class="table-header">
                    <tr>
                        <th>Songs</th>
                        <th>Intonation</th>
                        <th>Vocal Quality</th>
                        <th>Fidelity to Score</th>
                        <th>Artistic Impression</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>85</td>
                        <td>80</td>
                        <td>82</td>
                        <td>85</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>75</td>
                        <td>80</td>
                        <td>84</td>
                        <td>85</td>
                    </tr>
                    <tr>
                        <td>Average</td>
                        <td>80</td>
                        <td>80</td>
                        <td>83</td>
                        <td>85</td>
                    </tr>
                    <tr>
                        <td colspan="4">Total Score</td>
                        <td>82</td>
                    </tr>
                </tbody>
            </table>

            <!-- Section B: Score Sheet (3 songs) -->
            <h5>b. Score Sheet (3 songs)</h5>
            <table class="text-center table table-striped table-bordered criteria-table">
                <thead class="table-header">
                    <tr>
                        <th>Songs</th>
                        <th>Intonation</th>
                        <th>Vocal Quality</th>
                        <th>Fidelity to Score</th>
                        <th>Artistic Impression</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>85</td>
                        <td>80</td>
                        <td>82</td>
                        <td>85</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>75</td>
                        <td>80</td>
                        <td>84</td>
                        <td>85</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>80</td>
                        <td>80</td>
                        <td>83</td>
                        <td>85</td>
                    </tr>
                    <tr>
                        <td>Average</td>
                        <td>80</td>
                        <td>80</td>
                        <td>83</td>
                        <td>85</td>
                    </tr>
                    <tr>
                        <td colspan="4">Total Score</td>
                        <td>82</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
@endsection
