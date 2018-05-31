#include <iostream>
#include <vector>
int main() {
    long long a[10], max , n, count = 0;
    bool arYra = false;
    std::vector<long long>kiek_skirtingu;
    std::cin>>n;
    for (auto i = 0 ; i<n ; i++ ){
        std::cin>>a[i];
    }
    for(auto i = 0; i<n ;i++){
        for(auto j = 0 ; j<n ; j++){
            if( a[i] == a[j] ){
                count++;
            }
        }
        kiek_skirtingu.push_back(count);
        count = 0;
    }
    for (auto i = 0; i < n; i++) {
        if (kiek_skirtingu[i] == 1){
            if (arYra == true){
                if(a[i] > max){
                    max = a[i];
                }
            }else{
                arYra = true;
                max = a[i];
            }
        }
    }
    if( arYra == true ){
        std::cout << max;
    }
    if ( arYra == false ){
        std::cout << "NO";
    }
    return 0;
}
