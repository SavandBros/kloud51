from django.contrib import admin

from planet_cms_integration.models import (
    ProductGroupPluginModel,
    ProductPluginModel,
)


@admin.register(ProductGroupPluginModel)
class ProductGroupPluginModelAdmin(admin.ModelAdmin):
    list_display = ('product_group', 'name', 'description', )


@admin.register(ProductPluginModel)
class ProductPluginModelAdmin(admin.ModelAdmin):
    list_display = ('product', 'group', 'name', 'info', 'label', )
