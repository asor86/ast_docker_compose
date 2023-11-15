#!/bin/bash
openssl req -x509 -newkey rsa:4096 -keyout loc.ast.ru.pem -out loc.ast.ru.crt -days 3650 -config openssl.cnf -nodes