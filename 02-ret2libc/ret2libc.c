#include <stdio.h>
#include <stdlib.h>
#include <unistd.h>

void vuln()
{
	char buf[128];
	read(0, buf, 256);
	printf("\nadress of buf=%p\n", buf);
}

int main()
{
	vuln();
	write(1, "Hello, World\n", 13);
}
