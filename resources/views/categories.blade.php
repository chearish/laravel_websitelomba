@extends('base')

@section('title', 'Categories')

@section('library-css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
@endsection

@section('content')
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            border: 1px solid #ddd;
            text-align: center;
            padding: 10px;
        }
        th {
            background-color: #003366;
            color: #fff;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .note {
            font-size: 12px;
            color: #555;
            margin-top: 10px;
        }
        .badge {
            color: black;
}




.song body {
  background: #e4ebf4;
  padding: 2rem;
  
}
.song h1 {
  font-family: sans-serif;
}
.song .olcards,
.song .olcards * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

.song .olcards {
  list-style: none;
  counter-reset: cardCount;
  font-family: sans-serif;
  display: flex;
  flex-direction: column;
  --cardsGap: 1rem;
  gap: var(--cardsGap);
  padding-bottom: var(--cardsGap);
}
.song .olcards li {
  counter-increment: cardCount;
  display: flex;
  color: white;
  --labelOffset: 1rem;
  --arrowClipSize: 1.5rem;
  margin-top: var(--labelOffset);
}

.song .olcards li::before {
  content: counter(cardCount, decimal-leading-zero);
  background: white;
  color: var(--cardColor);
  font-size: 2em;
  font-weight: 700;
  transform: translateY(calc(-1 * var(--labelOffset)));
  margin-right: calc(-1 * var(--labelOffset));
  z-index: 1;
  display: flex;
  justify-content: center;
  align-items: center;
  padding-inline: 0.5em;
}

.song .olcards li .content {
  background-color: var(--cardColor);
  --inlinePadding: 1em;
  --boxPadding: 0.5em;
  display: grid;
  padding: var(--boxPadding) calc(var(--inlinePadding) + var(--arrowClipSize))
    var(--boxPadding) calc(var(--inlinePadding) + var(--labelOffset));
  grid-template-areas:
    "icon title"
    "icon text";
  gap: 0.25em 1em;
  clip-path: polygon(
    0 0,
    calc(100% - var(--arrowClipSize)) 0,
    100% 50%,
    calc(100% - var(--arrowClipSize)) 100%,
    calc(100% - var(--arrowClipSize)) calc(100% + var(--cardsGap)),
    0 calc(100% + var(--cardsGap))
  );
  position: relative;
}
.song .olcards li .content::before {
  content: "";
  position: absolute;
  width: var(--labelOffset);
  height: var(--labelOffset);
  background: var(--cardColor);
  left: 0;
  bottom: 0;
  clip-path: polygon(0 0, 100% 0, 0 100%);
  filter: brightness(0.75);
}
.song .olcards li .content::after {
  content: "";
  position: absolute;
  height: var(--cardsGap);
  width: var(--cardsGap);
  background: linear-gradient(to right, rgba(0, 0, 0, 0.25), transparent 50%);
  left: 0;
  top: 100%;
}
.song .olcards li .icon {
  grid-area: icon;
  align-self: center;
  font-size: 2em;
}
.song .olcards li .content .title {
  grid-area: title;
  font-size: 1.25em;
  /* font-weight: 700; */
}
.song.olcards li .content .text {
  grid-area: text;
}

    </style>

    <div class="container mb-5">
    <h1 class="text-center mt-5 mb-2" style="font-size: 2rem; font-weight: bold; text-decoration: underline; color: #003366;">CATEGORIES</h1>
        <table>
            <thead>
                <tr>
                    <th>Category</th>
                    <th>Voices</th>
                    <th>Range of Age</th>
                    <th>10% of the singers out of the age range</th>
                    <th colspan="2">Total Singers</th>
                </tr>
                <tr>
                    <th colspan="4"></th>
                    <th>Min.</th>
                    <th>Max.</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Early Children (A0)</td>
                    <td>S(A)</td>
                    <td>≤ 6 years old</td>
                    <td>Max. 7 years old</td>
                    <td>20</td>
                    <td>40</td>
                </tr>
                <tr>
                    <td>Children (A1)</td>
                    <td>S(S)A(A)</td>
                    <td>≤ 12 years old</td>
                    <td>Max. 14 years old</td>
                    <td>20</td>
                    <td>40</td>
                </tr>
                <tr>
                    <td>Teenager (A2)</td>
                    <td>S(S)A(A)(Bar)</td>
                    <td>≤ 15 years old</td>
                    <td>Max. 17 years old</td>
                    <td>20</td>
                    <td>40</td>
                </tr>
                <tr>
                    <td>Equal Open (A3)</td>
                    <td>SSAA/TTBB</td>
                    <td>Free</td>
                    <td>Free</td>
                    <td>20</td>
                    <td>40</td>
                </tr>
                <tr>
                    <td>Mixed Youth (B1)</td>
                    <td>SATB</td>
                    <td>≤ 18 years old</td>
                    <td>Max. 19 years old</td>
                    <td>20</td>
                    <td>40</td>
                </tr>
                <tr>
                    <td>Mixed Adult (B2)</td>
                    <td>SATB</td>
                    <td>≤ 25 years old</td>
                    <td>Max. 26 years old</td>
                    <td>20</td>
                    <td>40</td>
                </tr>
                <tr>
                    <td>Mixed Open (B3)</td>
                    <td>SATB</td>
                    <td>Free</td>
                    <td>Free</td>
                    <td>20</td>
                    <td>40</td>
                </tr>
                <tr>
                    <td>Folklore (F)</td>
                    <td>Free</td>
                    <td>Free</td>
                    <td>Free</td>
                    <td>20</td>
                    <td>40</td>
                </tr>
                <tr>
                    <td>Musica Sacra (S)</td>
                    <td>Free</td>
                    <td>Free</td>
                    <td>Free</td>
                    <td>20</td>
                    <td>40</td>
                </tr>
                <tr>
                    <td>Church Children's Choir (C1) *</td>
                    <td>SSAA/SABar</td>
                    <td>≤ 18 years old</td>
                    <td>Max. 19 years old</td>
                    <td>20</td>
                    <td>40</td>
                </tr>
                <tr>
                    <td>Church Youth Choir (C2) *</td>
                    <td>SATB</td>
                    <td>≤ 25 years old</td>
                    <td>Max. 26 years old</td>
                    <td>20</td>
                    <td>40</td>
                </tr>
            </tbody>
        </table>
        <p class="note">* Must represent the Church (indicated by a letter of assignment from the Church)</p>
    </div>

    
<section class="song">
<div class="container">
<body>
<h1 class="mb-4" style="font-size: 2rem; font-weight: bold; text-decoration: underline; color: #003366;">Song Requirements</h1>
	<ol class="olcards">
		<li style="--cardColor:#fc374e">
			<div class="content">
				<div class="text">
                <h6><b> Category A0<br></b></h6>
                    Sing 2 songs, with the following conditions :<br>
                    a. One song using Indonesian language (no dialect).<br>
                    b. One song using foreign language.</div>
            </div>
		</li>
		<li style="--cardColor:#36aeb3">
			<div class="content">
            <div class="text">
                <h6><b> Category A1, A2 and B1<br></b></h6>
                    Sing 3 songs, with the following conditions :<br>
                    a. One song composed/arranged by a composer/arranger from the participant origin country.<br>
                    b. One song composed/arranged by a composer/arranger from other country.<br>
                    c. One free choice.</div>
			</div>
		</li>
		<li style="--cardColor:#162d59">
			<div class="content">
				<div class="text">
                <h6><b>Category A3, B2 and B3<br></b></h6>
                Sing 3 songs, with the following conditions :<br>
                a. One song composed by composer born before 1900.<br>
                b. One song composed/arranged by composer in 1900 or after 1900.<br>
                c. One free choice.</div>
			</div>
		</li>
		<li style="--cardColor:#f15f0e">
			<div class="content">
            <div class="text">
                <h5><b> Category S<br></b></h5>
                Sing 2 Sacred songs, with the following conditions :<br>
                a. One choral composition from the Renaissance or Baroque era.<br>
                b. One choral composition from the Contemporary era with a Christian theme<br>
                (Christian Contemporary Choral Works).</div>
			</div>
		</li>
        <li style="--cardColor:#fc374e">
			<div class="content">
				<div class="text">
                <h6><b> Category C1 and C2<br></b></h6>
                    Sing 2 Church songs, with the following conditions:<br>
                    a. One Church song in Indonesian or an Indonesian translation.<br>
                    b. One Church song in a foreign language.</div>
            </div>
		</li>
        <li style="--cardColor:#36aeb3">
			<div class="content mb-5">
            <div class="text">
                <h6><b> Category F<br></b></h6>
                Two contrasting Folklore songs from the participants origin country.</div>
			</div>
		</li>
	</ol>
</body>
</section>
<!-- 
    <section>
    <div class="container mt-5">
    <h1 class="text-center mb-4" style="font-size: 2.5rem; font-weight: bold; text-decoration: underline; color: #003366;">Song Requirements</h1>
    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm p-3">
                <h3 class="card-title">1. Category A0</h3>
                <p>Sing 2 songs, with the following conditions:</p>
                <ul>
                    <li>One song using Indonesian language (no dialect).</li>
                    <li>One song using foreign language.</li>
                </ul>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm p-3">
                <h3 class="card-title">2. Category A1, A2 and B1</h3>
                <p>Sing 3 songs, with the following conditions:</p>
                <ul>
                    <li>One song composed/arranged by a composer/arranger from the participant origin country.</li>
                    <li>One song composed/arranged by a composer/arranger from another country.</li>
                    <li>One free choice.</li>
                    <li>Maximum 2 songs can be performed with musical instrument.</li>
                </ul>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm p-3">
                <h3 class="card-title">3. Category A3, B2 and B3</h3>
                <p>Sing 3 songs, with the following conditions:</p>
                <ul>
                    <li>One song composed by a composer born before 1900.</li>
                    <li>One song composed/arranged by a composer in 1900 or after 1900.</li>
                    <li>One free choice.</li>
                    <li>Maximum 1 song can be performed with musical instrument.</li>
                </ul>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm p-3">
                <h3 class="card-title">4. Category F</h3>
                <p>Two contrasting Folklore songs from the participant's origin country.</p>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm p-3">
                <h3 class="card-title">5. Category S</h3>
                <p>Sing 2 Sacred songs, with the following conditions:</p>
                <ul>
                    <li>One choral composition from the Renaissance or Baroque era.</li>
                    <li>One choral composition from the Contemporary era with a Christian theme (Christian Contemporary Choral Works).</li>
                </ul>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm p-3">
                <h3 class="card-title">6. Category C1 and C2</h3>
                <p>Sing 2 Church songs, with the following conditions:</p>
                <ul>
                    <li>One Church song in Indonesian or an Indonesian translation.</li>
                    <li>One Church song in a foreign language.</li>
                </ul>
            </div>
        </div>
    </div>
</div>
</section> -->


    <!-- <div class="container mb-5">
    <h2 class="section-title mt-5 mb-2 text-center">SONG REQUIREMENTS</h2>
        <div class="timeline">
            <div class="timeline-container primary">
                <div class="timeline-icon">
                </div>
                <div class="timeline-body">
                    <h4 class="timeline-title"><span class="badge">1. Category A0</span></h4>
                    <p>Sing 2 songs, with the following conditions :<br>
                        a. One song using Indonesian language (no dialect).<br>
                        b. One song using foreign language.</p>
                </div>
            </div>
            <div class="timeline-container danger">
                <div class="timeline-icon">
                </div>
                <div class="timeline-body">
                    <h4 class="timeline-title"><span class="badge">4. Category F</span></h4>
                    <p>Two contrasting Folklore songs from the participants origin country.</p>
                </div>
            </div>
            <div class="timeline-container success">
                <div class="timeline-icon">
                </div>
                <div class="timeline-body">
                <h4 class="timeline-title"><span class="badge">2. Category A1, A2 and B1</span></h4>
                    <p>Sing 3 songs, with the following conditions :<br>
                        a. One song composed/arranged by a composer/arranger from the participant origin country.<br>
                        b. One song composed/arranged by a composer/arranger from other country.<br>
                        c. One free choice.<br>
                        d. Maximum 2 songs can be performed with musical instrument.</p>
                </div>
            </div>
            <div class="timeline-container danger">
                <div class="timeline-icon">
                </div>
                <div class="timeline-body">
                    <h4 class="timeline-title"><span class="badge">5. Category S</span></h4>
                    <p>Sing 2 Sacred songs, with the following conditions :<br>
                        a. One choral composition from the Renaissance or Baroque era.<br>
                        b. One choral composition from the Contemporary era with a Christian theme
                        (Christian Contemporary Choral Works).</p>
                </div>
            </div>
            <div class="timeline-body">
                <h4 class="timeline-title"><span class="badge">3. Category A3, B2 and B3</span></h4>
                    <p>Sing 3 songs, with the following conditions :<br>
                        a. One song composed by composer born before 1900.<br>
                        b. One song composed/arranged by composer in 1900 or after 1900.<br>
                        c. One free choice.<br>
                        d. Maximum 1 song can be performed with musical instrument.</p>
                </div>
                <div class="timeline-container danger">
                <div class="timeline-icon">
                </div>
                <div class="timeline-body">
                    <h4 class="timeline-title"><span class="badge">6. Category C1 and C2</span></h4>
                    <p>Sing 2 Church songs, with the following conditions:<br>
                        a. One Church song in Indonesian or an Indonesian translation.<br>
                        b. One Church song in a foreign language.</p>
                </div>
            </div>
        </div>
    </div> -->

   
@endsection
