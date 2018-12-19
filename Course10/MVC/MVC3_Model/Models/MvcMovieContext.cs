using Microsoft.EntityFrameworkCore;

namespace MVC3_Model.Models
{
    public class MvcMovieContext : DbContext
    {
        public MvcMovieContext (DbContextOptions<MvcMovieContext> options)
            : base(options)
        {
        }

        public DbSet<MVC3_Model.Models.Movie> Movie { get; set; }
    }
}