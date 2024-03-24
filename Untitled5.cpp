#include<stdio.h>
int main()
{
	int n,rev=0,i,rem=0;
	printf("number = ");
	scanf("%d",&n);
	i=n;
	while(n>0)
	{
		rem=n%10;
		rev=rem+rev*10;
		n=n/10;
	}
	if(rev==i)
	printf("The reverse of the number is %d\n its a palindrome number",rev);
	else
	printf("The reverse of the number is %d\n its not a palindrome number",rev);
}
