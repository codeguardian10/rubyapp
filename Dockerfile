# Example Dockerfile with potential issues
FROM ubuntu:latest
RUN apt-get update && apt-get install -y software-properties-common
RUN add-apt-repository ppa:example/repository
RUN apt-get update && apt-get install -y vulnerable-package
