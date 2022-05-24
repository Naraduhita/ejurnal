<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Step 1.Starting the submission</title>
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
                        Step 1. Starting the submission
                    </p>
                </div>
                <hr>
            </div>
            <hr>
            <div class="link-step" id="contact">
                <div class="bold">1. START</div>
                <div>2. UPLOAD SUBMISSION</div>
                <div>3. ENTER METADATA</div>
                <div>4. UPLOAD SUPPLEMENTARY FILES</div>
                <div>5. COMFIRMATION</div>
            </div>
            <div>
                <p id="contact">Encountering difficulties? Contact for assistance.</p>
            </div>
            <hr>
            <div>
                <h1 class="submission-file">Submission Checklist</h1>
                <p id="contact">Indicate that this submission is ready to be considered by thus journal by checking off the following (comments to the editor can be added below). </p>
            </div>
            <div>
                <table>
                    <tr>
                        <td><input type="checkbox" id="sub_check" name="sub_check" value="step 1"></td>
                        <td id="jarak-tabel">The submission has not been previously published, nor is it before another journal for consideration (or an explanation has been provided in Comments to the Editor).</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" id="sub_check" name="sub_check" value="step 1"></td>
                        <td id="jarak-tabel">The submission file is in OpenOffice, Microsoft Word, RTF, or WordPerfect document file format.</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" id="sub_check" name="sub_check" value="step 1"></td>
                        <td id="jarak-tabel">Where available, URLs for the references have been provided.</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" id="sub_check" name="sub_check" value="step 1"></td>
                        <td id="jarak-tabel">The text is single-spaced; uses a 12-point font; employs italics, rather than underlining (except with URL addresses); and all illustrations, figures, and tables are placed within the text at the appropriate points, rather than at the end.</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" id="sub_check" name="sub_check" value="step 1"></td>
                        <td id="jarak-tabel">The text adheres to the stylistic and bibliographic requirements outlined in the <a href="#" class="green" id="underline">Author Guidelines</a>, which is found in About the Journal.</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" id="sub_check" name="sub_check" value="step 1"></td>
                        <td id="jarak-tabel">If submitting to a peer-reviewed section of the journal, the instructions in <a href="#" class="green" id="underline">Ensuring a Blind Review</a> have been followed.</td>
                    </tr>
                </table>
                <br />
            </div>
            <hr>
            <div>
                <h1 class="submission-file">Journal's Privacy Statement</h1>
                <p id="contact">The names and email addresses entered in this journal site will be used exlusively for the stated purpose of this journal and will not be available for any other purpose or to any other party.<br /></p>
            </div>
            <hr>
            <div>
                <h1 class="submission-file">Comments for the Editor</h1>
                <label for="subject" id="contact" style="vertical-align: top; padding: 0 20px 0 0;">Please Enter 5 Potential Reviewers</label>
                <textarea style="border-style: inset;" name="subject" id="subject" cols="40" rows="4" placeholder="Name|Affiliation|Email|Reasons"></textarea>
            </div>
            <hr>
            <div>
                <button class="btn btn-save" onclick="window.location='<?php echo site_url("http://localhost:8080/UploadingSubmissiontwo"); ?>'">
                    Save and continue
                </button>
                <button class="btn btn-cancel">
                    Cancel
                </button>
                <p id="contact">* Denotes required field</p>
            </div>
        </div>
</body>

</html>