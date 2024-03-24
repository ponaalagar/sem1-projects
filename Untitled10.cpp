#include<stdio.h>
int main()
{
	int a,b,c;
	char op;
	printf("Enter any two numbers : ");
	scanf("%d%d",&a,&b);
	printf("Enter the operator: ");
	scanf(" %c",&op);
	printf("Answer: ");
	switch(op)
	{
		case '+':
			printf("%d",a+b);
			break;
		case '-':
			printf("%d",a-b);
			break;
		case '*':
			printf("%d",a*b);
			break;
			
		case '/' :
			if(b!=0)
			printf("%d",a/b);
			else
			printf("Infinity");
			break;
		
	}
}
