mysqldump -u [dbUser] -p[dbPassowrd] [database] > [Path Where to store file]/$(date +\%Y-\%m-\%d-\%H-\%M-\%S)-backup.sql

#Command to run Cron
#    $ crontab -e
# +---------------- minute (0 - 59)
# |  +------------- hour (0 - 23)
# |  |  +---------- day of month (1 - 31)
# |  |  |  +------- month (1 - 12)
# |  |  |  |  +---- day of week (0 - 6) (Sunday=0 or 7)
# |  |  |  |  |
# *  *  *  *  *  command to be executed/path to command

