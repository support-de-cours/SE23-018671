#!/bin/bash

# Create & Push a new commit
# --

# Local config
# . $(dirname "$0")/config.sh

# Clear shell history
echo "";clear;

# Message
echo -e "${YELLOW}Action  :${NC} Commit & Push";
echo -e "------------------------------------------------------------------------";

# Input
echo -e "${YELLOW}Votre message de commit :${NC}"
read msg 

# GIT Commands
git add *;
git commit -m "$msg";
git push;
