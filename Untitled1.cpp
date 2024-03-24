#include<stdio.h>
int main()
{
	int a,b,c,big;
	scanf("%d\n%d\n%d",&a,&b,&c);
	if(a>b&&b>c)
	printf("A is the biggest\n");
	else if(b>a&&b>c)
	printf("B is the biggest\n");
	else
	printf("C is the biggest\n");
	
	return 0;
	
	
}
