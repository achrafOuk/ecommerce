echo @off
title "Push request"
git add *
git commit -m %1
git push origin master
