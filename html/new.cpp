#include<bits/stdc++.h>
using namespace std;

int main(){
    int n;
    cin>>n;
    for (int i = 0; i < n; i++)
    {
        int q;
        cin>>q;
        map<int,int> m;
        int sum=0;
        for (int j = 0; j < q; j++)
        {
            int el;
            cin>>el;
            sum+=el;
            m[el]+=1;
        }
        if(m[1]!=0 && m[2]!=0){
            if (sum%2==0)
            {
                cout<<"YES"<<endl;
            }
            else{
                cout<<"NO"<<endl;
            }
            
        }
        else{
            if ((m[1]==0 && m[1]%2==0) || (m[2]==0 && m[2]%2==0))
            {
                cout<<"YES"<<endl;
            }
            else{
                cout<<"NO"<<endl;
            }
        }
        
    }
    
    return 0;
}