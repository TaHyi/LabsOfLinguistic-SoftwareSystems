using Microsoft.Owin;
using Owin;

[assembly: OwinStartupAttribute(typeof(FamLab00004.Startup))]
namespace FamLab00004
{
    public partial class Startup
    {
        public void Configuration(IAppBuilder app)
        {
            ConfigureAuth(app);
        }
    }
}
