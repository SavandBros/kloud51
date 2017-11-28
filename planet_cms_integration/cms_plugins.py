from cms.plugin_base import CMSPluginBase
from cms.plugin_pool import plugin_pool
from django.utils.translation import ugettext_lazy as _

from planet_cms_integration.models import ProductGroupPluginModel


@plugin_pool.register_plugin
class ProductGroupPluginPublisher(CMSPluginBase):
    model = ProductGroupPluginModel
    name = _('Product Group')
    render_template = 'planet_cms_integration/product_group.html'

    def render(self, context, instance, placeholder):
        context.update({'instance': instance})
        return context
