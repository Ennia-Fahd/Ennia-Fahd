from django.shortcuts import render
from django.views import View
#from django.http import HttpResponse
# Create your views here.

class Home(View):
    def get(self,request):
        return render(request,'hello.html',{})


class ProductList(View):
    def get(self,request):
        return render(request,'ListProducts.html',{'produits':products})
