#!/usr/bin/python

#provo a fare uno script per lanciare e stoppare rtkrcv


import sys
import os
import subprocess
# author = input('nome autore= ')
#
# if not author:
#     print('devi specificare un autore: ')
#     sys.exit()



#if len(sys.argv)>0:
#    var=sys.argv[1]

#print(var)
#author = 'autore'

#assegno alle variabili i valori letti dal file php

pos1_posmode = sys.argv[1]
nome_autore = sys.argv[2]
pos1_elmask = str(sys.argv[3])
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

#scrivo i file di configurazione
with open('./prova.conf', 'r') as config:
    config_nuova = config.read()
config_nuova = config_nuova.replace('=pos1-posmode', '=%s' % pos1_posmode)
with open('./configurazioni_output/prova_{0}.conf'.format(nome_autore), 'w') as config:
    config.write(config_nuova)

config_autore ='./configurazioni_output/prova_{0}.conf'.format(nome_autore)

with open(config_autore, 'r') as config:
    config_nuova = config.read()
config_nuova = config_nuova.replace('=pos1-elmask', '=%s' %pos1_elmask)
with open(config_autore, 'w') as config:
    config.write(config_nuova)

with open(config_autore, 'r') as config:
    config_nuova = config.read()
config_nuova = config_nuova.replace('=pos1-ionoopt', '=%s' %pos1_ionoopt)
with open(config_autore, 'w') as config:
    config.write(config_nuova)

with open(config_autore, 'r') as config:
    config_nuova = config.read()
config_nuova = config_nuova.replace('=pos1-tropopt', '=%s' %pos1_tropopt)
with open(config_autore, 'w') as config:
    config.write(config_nuova)

with open(config_autore, 'r') as config:
    config_nuova = config.read()
config_nuova = config_nuova.replace('=pos1-sateph', '=%s' %pos1_sateph)
with open(config_autore, 'w') as config:
    config.write(config_nuova)

with open(config_autore, 'r') as config:
    config_nuova = config.read()
config_nuova = config_nuova.replace('=pos1-navsys', '=%s' %pos1_navsys)
with open(config_autore, 'w') as config:
    config.write(config_nuova)

with open(config_autore, 'r') as config:
    config_nuova = config.read()
config_nuova = config_nuova.replace('=out-solformat', '=%s' %out_solformat)
with open(config_autore, 'w') as config:
    config.write(config_nuova)

with open(config_autore, 'r') as config:
    config_nuova = config.read()
config_nuova = config_nuova.replace('=out-solformat', '=%s' %out_solformat)
with open(config_autore, 'w') as config:
    config.write(config_nuova)

with open(config_autore, 'r') as config:
    config_nuova = config.read()
config_nuova = config_nuova.replace('=out-timesys', '=%s' %out_timesys)
with open(config_autore, 'w') as config:
    config.write(config_nuova)

with open(config_autore, 'r') as config:
    config_nuova = config.read()
config_nuova = config_nuova.replace('=out-timeform', '=%s' %out_timeform)
with open(config_autore, 'w') as config:
    config.write(config_nuova)

with open(config_autore, 'r') as config:
    config_nuova = config.read()
config_nuova = config_nuova.replace('=out-height', '=%s' %out_height)
with open(config_autore, 'w') as config:
    config.write(config_nuova)

with open(config_autore, 'r') as config:
    config_nuova = config.read()
config_nuova = config_nuova.replace('=out-geoid', '=%s' %out_geoid)
with open(config_autore, 'w') as config:
    config.write(config_nuova)

with open(config_autore, 'r') as config:
    config_nuova = config.read()
config_nuova = config_nuova.replace('=outstr1-format', '=%s' %outstr1_format)
with open(config_autore, 'w') as config:
    config.write(config_nuova)

with open(config_autore, 'r') as config:
    config_nuova = config.read()
config_nuova = config_nuova.replace('/test_villa', '/test_%s' % nome_autore)
with open(config_autore, 'w') as config:
    config.write(config_nuova)



















