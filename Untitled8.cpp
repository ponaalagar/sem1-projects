#include<stdio.h>
int main()
{
	int a,m,n,p=0;
	printf("Enter the range : ");
	scanf("%d%d",&m,&n);
	printf("The prime numbers are ");
	do
	{
		if(m>1)
		{
			p=0;
			for(int i=2;i<m;i++)
			{
				if(m%i==0)
				p=p+1;
			}
			if(p==0)
			printf("%d ",m);
		}
		m++;
	}while(m<n);
	
}
