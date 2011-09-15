#!/bin/sh
echo $1
#ORIG_DIR=`pwd`
#cd `dirname $0`
python release_stale_jails.py
python worker.py -t -n $1
#cd $ORIG_DIR

