import socket                   # Import socket module

port = 8085                   # Reserve a port for your service every new transfer wants a new port or you must wait.
s = socket.socket()             # Create a socket object
host = "192.168.2.28"   # Get local machine name
s.bind((host, port))            # Bind to the port
s.listen(5)                     # Now wait for client connection.

print 'Server listening....'


while True:
    conn, addr = s.accept()     # Establish connection with client.
    print 'Got connection from', addr
    nome_file = conn.recv(1024)
    print('Server received', repr(nome_file))
    #filename = conn.recv(1024)
    #print('filename is: ', repr(filename))

    # filename='TCPSERVER.py' #In the same folder or path is this file running must the file you want to tranfser to be
    # f = open(filename,'rb')
    # l = f.read(1024)
    # while (l):
    #    conn.send(l)
    #    print('Sent ',repr(l))
    #    l = f.read(1024)
    # f.close()

    with open(nome_file, 'wb') as f:
        print 'file opened'
        while True:
            print('receiving data...')
            data = conn.recv(1024)
            print('data=%s', (data))
            if not data:
                break
        #write data to a file
            f.write(data)
            print('Done receiving')
            conn.send('Thank you for connecting')


    conn.close()