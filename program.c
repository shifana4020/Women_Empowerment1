#include <stdio.h>
#include <string.h>
void solve(char *s){
int freq[10] = {0};
for(int i=0;i<strlen(s);i++)
{
if(s[i] >= '0' && s[i]<= '9'){
freq[s[i] - '0']++;
}
}
for(int i=0;i<10;i++){
if(freq[i]>0)
printf("(number %d,freq %d)\n",i,freq[i]);
}
} int main(){
char *s ="wetfhb435vygf";
solve(s);
}