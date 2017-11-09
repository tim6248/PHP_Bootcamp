<?php
require_once "dbmodel.php";
$commList = $dbConn->commCall((int)$outerValue['commid']);
if (count($commList) > 4): ?>
    <div class="ext_btn">댓글 모두 보기</div>
<?php endif; ?>
<div class="comment">
    <ul class="comm_li">
        <?php if ($commList):
            $k = 0; ?>
            <?php foreach ($commList as $innerValue): ?>
                      <li>
                        <p class="comm_text">
                          <a class="prof_name"><?= $innerValue['comname']?></a><?=$innerValue['comcont']?>
                        </p>
                      </li>
                <?php
                $k++;
                if ($k >= 4) {
                    break;
                }
                ?>
            <?php endforeach; ?>
        <?php endif; ?>
    </ul>
</div>
