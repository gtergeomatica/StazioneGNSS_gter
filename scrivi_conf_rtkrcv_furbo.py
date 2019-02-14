#!/usr/bin/python
# -*- coding: utf-8 -*-
#Gter copyleft 
#Lorenzo Benvenuto

#script per modificare il file di configurazione di rtkrcv

import sys
import os
import subprocess
import shutil #shell utilities


def scriviConfig (p1, p2, p3, p4, p5, p6, p7, p8, p9, p10, p11, p12, p13):

    #prendo i parametri e li salvo in un array
    parametri =[p2, p3, p4, p5, p6, p7, p8, p9, p10, p11, p12, p13]

    #copio il file su una cartella di rete
    shutil.copy("./prova.conf", "../progetti_convegni/ricerca/2018_2022_PhD_Lorenzo/stazione_permanente/configurazioni/prova_{0}.conf".format(p1))   #copio il file prova conf e lo rinomino con il nome dell'autore
    #copio il file il locale
    #shutil.copy("./prova.conf", "./configurazioni_output/prova_{0}.conf".format(p1))   #copio il file prova conf e lo rinomino con il nome dell'autore

    testo_config = ['=pos1-posmode', '=pos1-elmask', '=pos1-ionoopt', '=pos1-tropopt', '=pos1-sateph', '=pos1-navsys', '=out-solformat', '=out-timesys', '=out-timeform', '=out-height', '=out-geoid', '=outstr1-format']

    #percorso cartella di rete
    config_autore = '../progetti_convegni/ricerca/2018_2022_PhD_Lorenzo/stazione_permanente/configurazioni/prova_{0}.conf'.format(p1)
    #percorso in locale
    #config_autore ='./configurazioni_output/prova_{0}.conf'.format(p1)


    for i, j in zip(parametri, testo_config):
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




def main():

    #prendo in input i parametri (o li specifico a mano o li leggo dal file scrivi_configurazione.php)

    nome_autore = sys.argv[1]
    pos1_posmode = sys.argv[2]
    pos1_elmask = sys.argv[3]
    pos1_ionoopt = sys.argv[4]
    pos1_tropopt = sys.argv[5]
    pos1_sateph = sys.argv[6]
    pos1_navsys = sys.argv[7]
    out_solformat = sys.argv[8]
    out_timesys = sys.argv[9]
    out_timeform = sys.argv[10]
    out_height = sys.argv[11]
    out_geoid = sys.argv[12]
    outstr1_format = sys.argv[13]

    #chiamo la funzione per scrivere il file di cofigurazione
    scriviConfig(nome_autore, pos1_posmode, pos1_elmask, pos1_ionoopt, pos1_tropopt, pos1_sateph, pos1_navsys, out_solformat, out_timesys, out_timeform, out_height, out_geoid, outstr1_format)

    print ("creato file prova_%s.conf " %nome_autore)
   
if __name__ == "__main__":
    main()    


