#!/bin/sh

if [ -d site ]; then
    cd site
    aws s3 sync . s3://itime.io --cache-control "max-age=600" --delete
else
    echo "You're not in the right directory"
    exit
fi