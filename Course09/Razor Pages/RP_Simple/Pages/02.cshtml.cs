using Microsoft.AspNetCore.Mvc.RazorPages;
using System;

namespace RazorPagesIntro.Pages
{
    public class OrnekModel : PageModel
    {
        public string Message { get; private set; } = "C# bir property : PageModel";

        public void OnGet()
        {
            Message += $": Sunucu saati { DateTime.Now }";
        }
    }
}