from cms.plugin_base import CMSPluginBase
from cms.plugin_pool import plugin_pool
from django.utils.translation import ugettext_lazy as _

from cmsplugin_cover.models import Cover


@plugin_pool.register_plugin
class CoverPluginPublisher(CMSPluginBase):
    model = Cover
    name = _('Cover Plugin')
    render_template = 'cmsplugin_cover/cover.html'

    def render(self, context, instance, placeholder):
        context.update({'instance': instance})
        return context
