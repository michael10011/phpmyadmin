#!/usr/bin/env bash
echo "Entering into the Application Container ..."

docker exec -it $(docker ps --filter ancestor=build_app --format "{{.ID}}") /bin/bash
