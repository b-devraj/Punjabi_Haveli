from django.shortcuts import render


def home(request):
    #Using the render method from django shortcuts to process templates
    #First arg is request, second is directory of template, third is...
    return render(request, 'Haveli/home.html')

def order(request):
    return render(request, 'Haveli/order.html')

# Create your views here.
