PRO_PATH=$(shell pwd)
BIN=test
SRC=$(shell ls *.c)
OBJ=$(SRC:.c=.o)
CC=gcc
LDFLAGS=#-static
$(BIN):$(OBJ)
	$(CC) -o $(BIN) $^ $(LDFLAGS)
%.o:%.c
	$(CC) -c $<
.PHONY:clean
clean:
	rm *.o $(BIN)
