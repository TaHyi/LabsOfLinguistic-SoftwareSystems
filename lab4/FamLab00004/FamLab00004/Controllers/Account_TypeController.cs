using System;
using System.Collections.Generic;
using System.Data;
using System.Data.Entity;
using System.Linq;
using System.Net;
using System.Web;
using System.Web.Mvc;
using FamLab00004.Models;

namespace FamLab00004.Controllers
{
    public class Account_TypeController : Controller
    {
        private Lab4Entities db = new Lab4Entities();

        // GET: Account_Type
        public ActionResult Index()
        {
            return View(db.Account_Type.ToList());
        }

        // GET: Account_Type/Details/5
        public ActionResult Details(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            Account_Type account_Type = db.Account_Type.Find(id);
            if (account_Type == null)
            {
                return HttpNotFound();
            }
            return View(account_Type);
        }

        // GET: Account_Type/Create
        public ActionResult Create()
        {
            return View();
        }

        // POST: Account_Type/Create
        // To protect from overposting attacks, please enable the specific properties you want to bind to, for 
        // more details see http://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult Create([Bind(Include = "Account_Type_ID,Account_Type1")] Account_Type account_Type)
        {
            if (ModelState.IsValid)
            {
                db.Account_Type.Add(account_Type);
                db.SaveChanges();
                return RedirectToAction("Index");
            }

            return View(account_Type);
        }

        // GET: Account_Type/Edit/5
        public ActionResult Edit(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            Account_Type account_Type = db.Account_Type.Find(id);
            if (account_Type == null)
            {
                return HttpNotFound();
            }
            return View(account_Type);
        }

        // POST: Account_Type/Edit/5
        // To protect from overposting attacks, please enable the specific properties you want to bind to, for 
        // more details see http://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult Edit([Bind(Include = "Account_Type_ID,Account_Type1")] Account_Type account_Type)
        {
            if (ModelState.IsValid)
            {
                db.Entry(account_Type).State = EntityState.Modified;
                db.SaveChanges();
                return RedirectToAction("Index");
            }
            return View(account_Type);
        }

        // GET: Account_Type/Delete/5
        public ActionResult Delete(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            Account_Type account_Type = db.Account_Type.Find(id);
            if (account_Type == null)
            {
                return HttpNotFound();
            }
            return View(account_Type);
        }

        // POST: Account_Type/Delete/5
        [HttpPost, ActionName("Delete")]
        [ValidateAntiForgeryToken]
        public ActionResult DeleteConfirmed(int id)
        {
            Account_Type account_Type = db.Account_Type.Find(id);
            db.Account_Type.Remove(account_Type);
            db.SaveChanges();
            return RedirectToAction("Index");
        }

        protected override void Dispose(bool disposing)
        {
            if (disposing)
            {
                db.Dispose();
            }
            base.Dispose(disposing);
        }
    }
}
