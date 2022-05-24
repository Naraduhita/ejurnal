<!DOCTYPE html>
<html lang="en">

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Step 3. Entering the Submission's Metadata</title>
    <link rel="stylesheet" href="/style.css">
</head>

<body>
<div class="header">
        <p id="text-header">
            Information Techonology Journal
        </p>
    </div>
    
    <div class="content">
        <div id="submission">
            <div class="link-menu">
                <a href="#" class="green">Home</a>
                <a href=" #" class="green">About</a>
                <a href="#" class="green">User Home</a>
                <a href=" #" class="green">Search</a>
                <a href="#" class="green">Current</a>
                <a href=" #" class="green">Archives</a>
            </div>
            <hr>
    <div class="content-item">
                <div class="link-status">
                    <a href="#" class="green">Home</a>
                    <span>></span>
                    <a href="#" class="green">User</a>
                    <span>></span>
                    <a href="#" class="green">Author</a>
                    <span>></span>
                    <a href="#" class="green">Submission</a>
                    <span>></span>
                    <a href="#" class="green bold">New Submission</a>
                </div>

                <div class="title bold">
                    <p>
                    Step 3. Entering the Submission's Metadata
                    </p>
                </div>
                <hr>
            </div>
            <hr>
            <div class="link-step">
                <div>1. Start</div>
                <div>2. Upload Submission</div>
                <div class="bold">3. Enter Metadata</div>
                <div>4. Upload Supplementary Files</div>
                <div>5. Confirmation</div>
            </div>

            <div class="sub_checklist">
                <h2 class="judul_step">Authors</h2>

                <div>
                    <table>
                        <tr>
                            <td class = "kol_sam"><label for="">First Name *</label></td>
                            <td><textarea rows="1" cols="30" class="area_com"> </textarea></td>
                        </tr>
                        <tr>
                            <td class = "kol_sam"><label for="">Middle Name *</label></td>
                            <td><textarea rows="1" cols="30" class="area_com"> </textarea></td>
                        </tr>
                        <tr>
                            <td class = "kol_sam"><label for="">Last Name *</label></td>
                            <td><textarea rows="1" cols="30" class="area_com"> </textarea></td>
                        </tr>
                        <tr>
                            <td class = "kol_sam"><label for="">Email *</label></td>
                            <td><textarea rows="1" cols="45" class="area_com"> </textarea></td>
                        </tr>
                        <tr>
                            <td class = "kol_sam"><label for="">URL *</label></td>
                            <td><textarea rows="1" cols="45" class="area_com"> </textarea></td>
                        </tr>
                        <tr>
                            <td class = "kol_sam"><label for="">Affiliation</label></td>
                            <td><textarea rows="5" cols="55" class="area_com"> </textarea><p>(Your institution, e.g. "Simon Fraser University")</p></td>
                        </tr>
                        <tr>
                            <td class = "kol_sam"><label for="">Country</label></td>
                            <td><textarea rows="1" cols="55" class="area_com"> </textarea></td>
                        </tr>
                        <tr>
                            <td class = "kol_sam"><label for="">Bio Statement (E.g., department and rank)</label></td>
                            <td><textarea rows="5" cols="55" class="area_com"> </textarea></td>
                        </tr>
                    </table>

                </div>

                <button type="submit" class="search_b tombol garis">Add Author</button>
            </div>

            <div class="sub_checklist">
                <h2 class="judul_step">Title and Abstract</h2>

                <div class="garis">
                    <table>
                        <tr>
                            <td class = "kol_sam"><label for="">Title *</label></td>
                            <td><textarea rows="1" cols="50" class="area_com"> </textarea></td>
                        </tr>
                        <tr>
                            <td class = "kol_sam"><label for="">Abstract *</label></td>
                            <td><textarea rows="10" cols="50" class="area_com"> </textarea></td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="sub_checklist">
                <h2 class="judul_step">Indexing</h2>

                <p>Provide terms for indexing the submission; separate terms with a semi-colon (term1; term2; term3).</p>

                <div>
                    <table>
                        <tr>
                            <td class = "kol_sam"><label for="">Keywords</label></td>
                            <td><textarea rows="1" cols="30" class="area_com"> </textarea><p>Photosynthesis; Black Holes; Four-Color Map Problem; Bayesian Theory</p></td>
                        </tr>
                        <tr>
                            <td class = "kol_sam"><label for="">Language</label></td>
                            <td><textarea rows="1" cols="10" class="area_com"> </textarea><p>English=en; French=fr; Spanish=es. <a href="#">Additional codes.</a> </p></td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="sub_checklist">
                <h2 class="judul_step">Contributors and Supporting Agencies</h2>
                <p>Identify agencies (a person, an organization, or a service) that made contributions 
                    to the content or provided funding or support for the work presented in this submission. 
                    Separate them with a semi-colon (e.g. John Doe, Metro University; Master University, 
                    Department of Computer Science).</p>
                
                <div>
                    <table class="garis">
                        <tr>
                            <td class = "kol_sam"><label for="">Agencies</label></td>
                            <td><textarea rows="1" cols="50" class="area_com"> </textarea></td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="sub_checklist">
                <h2 class="judul_step">References</h2>
                <p>Provide a formatted list of references for works cited in this submission. 
                    Please separate individual references with a blank line.</p>

                    <div>
                        <table class="garis">
                            <tr>
                                <td class = "kol_sam"><label for="">References</label></td>
                                <td><textarea rows="10" cols="50" class="area_com"> </textarea></td>
                            </tr>
                        </table>
                    </div>
            </div>

            <div class="step_bawah">
                <button type="submit" class="save"  onclick="location='http://localhost:8080/uploadingSubmission'">Save and continue</button> 

                <p>* Denotes required field</p>
            </div>

        </div>
    </div>

</div>
<link rel="stylesheet" href="/style.css">
</body>
</html>