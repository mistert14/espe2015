echo "MISE A JOUR DES ENTITES A PARTIR DES BASES";
vendor/bin/doctrine orm:convert-mapping --from-database yml ./config/yaml --force;
vendor/bin/doctrine orm:generate-entities ./src;
vendor/bin/doctrine orm:info;
exit 0;
