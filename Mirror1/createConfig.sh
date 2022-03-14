#!/bin/sh

file=exists_and_writeable

if [ ! -e "$file" ] ; then
    touch "$file"
fi

if [ ! -w "$file" ] ; then
    echo cannot write to $file
    exit 1
fi