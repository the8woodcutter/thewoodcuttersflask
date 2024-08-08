#!/bin/bash
DIR=/var/www/html/the8woodcutter
USER1=$USER
USER2=www-data
cd $DIR/..
sudo chown -R $USER1:$USER2 $DIR
sudo find $DIR -type f -exec chmod 664 {} \;
sudo find $DIR -type d -exec chmod 775 {} \;
cd $DIR
sudo chmod +x set-permissions.sh
sudo chmod +x $DIR/blog/bb.sh
echo ""
echo "Success!"
echo ""
