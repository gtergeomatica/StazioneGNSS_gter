#!/usr/bin/python
# -*- coding: utf-8 -*-
#Gter copyleft 
#Lorenzo Benvenuto

#script per modificare il file di configurazione di rtkrcv

import sys
import os
import subprocess
import shutil #shell utilities


def scriviConfig (p1, p2, p3, p4):
    #prendo i parametri e li salvo in un array
    parametri =[p2, p3, p4]
    shutil.copy("./prova.conf", "./configurazioni_output/prova_{0}.conf".format(p1))   #copio il file prova conf e lo rinomino con il nome dell'autore
    testo_config = ['=pos1-posmode','=pos1-elmask','=pos1-ionoopt']
    config_autore ='./configurazioni_output/prova_{0}.conf'.format(p1)
    for i, j in zip(parametri,testo_config):
        with open(config_autore, 'r') as config:
            config_nuova = config.read()
            config_nuova = config_nuova.replace('%s' %j, '=%s' %i)
        with open(config_autore, 'w') as config:
            config.write(config_nuova)
    #per ultimo e fuori dal ciclo aggiungo il nome autore
    with open(config_autore, 'r') as config:
        config_nuova = config.read()
        config_nuova = config_nuova.replace('/test_villa', '/test_%s' % p1)
    with open(config_autore, 'w') as config:
        config.write(config_nuova)
    #print parametri



def main():
    nome_autore = sys.argv[1]
    pos1_posmode= "ciao"
    pos1_elmask = "luca"
    pos1_ionoopt = "parma"
    parametri =[nome_autore, pos1_posmode, pos1_elmask, pos1_ionoopt]

    scriviConfig(nome_autore, pos1_posmode, pos1_elmask, pos1_ionoopt)


   
if __name__ == "__main__":
    main()    


