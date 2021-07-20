#include<stdio.h>
#include<string.h>
#define N strlen(g)
Void crc();
Void xor();
char g[20];
char text[100];
char code[100];
int len;
int main()
{
inti,flag=0;
printf("\nEntermsg in binary form: ");
scanf("%s",text);
printf("\nEnter Generator: ");
scanf("%s",g);
len=strlen(text);
for(i=len;i<len+N-1;i++)
{
text[i]='0';
}
crc();
for(i=len;i<len+N-1;i++)
{
text[i]=code[i-len];
}
printf("\nFinalCodeword: %s\n",text);
printf("\nEnter the coded word: ");
scanf("%s",text);
crc();
for(i=0;i<strlen(code);i++)
if(code[i]=='1')
{
flag=1;
break;
}
}
if(flag==1)
{
printf("\nERROR\n");
}
else
{
printf("\nNO ERROR\n");
}
return 0;
}
Void crc()
{
Int i,j;
for(i=0;i<N;i++)
{
code[i]=text[i];
}
do
{
if(code[0]=='1')
{
xor();
}
for(j=0;j<N-1;j++)
{
code[j]=code[j+1];
}
code[j]=text[i];
i++;
}
while(i<=len+N-1);
}
Void xor()
{
int i;
for(i=0;i<N;i++)
{
if(code[i]==g[i])
{
code[i]='0';
}
else
{
code[i]='1';
}
}
}
