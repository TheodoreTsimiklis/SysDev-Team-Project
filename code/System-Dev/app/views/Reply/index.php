<?php include APPROOT . '/views/includes/header.php'; ?>

    </style>
<div class="" style="min-height: 100vh;background: url('<?php echo URLROOT; ?>/images/bg.png'); no-repeat center; background-size: cover;">

    <div class="table-responsive" style="transform: scale(1);transform-origin: top;opacity: 0.88;filter: contrast(92%); margin: auto 15rem;">
        <table class="table" style="font-size:medium;" >
            <h1 style="padding-top: 4rem; padding-bottom: 2rem; text-align: center;">Questions</h1>
            <thead>
                <tr>
                    <th style="background: #ffffff;border-bottom-color: #000000; color: #494949;">First Name</th>
                    <th style="background: #ffffff;border-bottom-color: #000000; color: #494949;">Last Name</th>
                    <th style="background: #ffffff;border-bottom-color: #000000; color: #494949;">Email</th>
                    <th style="background: #ffffff;border-bottom-color: #000000; color: #494949;">Phone</th>
                    <th style="background: #ffffff;border-bottom-color: #000000; color: #494949;">Question</th>
                    <th style="background: #ffffff;border-bottom-color: #000000; color: #494949;">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (!empty($data["questions"])) {
                    foreach ($data["questions"] as $question) {
                        echo "<tr>";
                        echo "<td style='background: #ffffff; color: #101010;'>
                   $question->first_name
                    </td>";
                        echo "<td style='background: #ffffff; color: #101010;'>
                    $question->last_name</a>
                    </td>";
                        echo "<td style='background: #ffffff; color: #101010;'>
                    $question->phone</a>
                    </td>";
                        echo "<td style='background: #ffffff; color: #101010;'>
                    $question->email</a>
                    </td>";
                        echo "<td style='background: #ffffff; color: #101010;'>
                    $question->question</a>
                    </td>";

                        echo "<td style='background: #ffffff;'>
                    <a href='/System-Dev/Reply/deleteQuestion/$question->question_id'>Delete</a>
                    </td>";
                       
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
<?php include APPROOT . '/views/includes/footer.php'; ?>