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
    public class Transaction_TypeController : Controller
    {
        private Lab4Entities db = new Lab4Entities();

        // GET: Transaction_Type
        public ActionResult Index()
        {
            return View(db.Transaction_Type.ToList());
        }

        // GET: Transaction_Type/Details/5
        public ActionResult Details(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            Transaction_Type transaction_Type = db.Transaction_Type.Find(id);
            if (transaction_Type == null)
            {
                return HttpNotFound();
            }
            return View(transaction_Type);
        }

        // GET: Transaction_Type/Create
        public ActionResult Create()
        {
            return View();
        }

        // POST: Transaction_Type/Create
        // To protect from overposting attacks, please enable the specific properties you want to bind to, for 
        // more details see http://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult Create([Bind(Include = "Transaction_Type_ID,Transaction_Type1")] Transaction_Type transaction_Type)
        {
            if (ModelState.IsValid)
            {
                db.Transaction_Type.Add(transaction_Type);
                db.SaveChanges();
                return RedirectToAction("Index");
            }

            return View(transaction_Type);
        }

        // GET: Transaction_Type/Edit/5
        public ActionResult Edit(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            Transaction_Type transaction_Type = db.Transaction_Type.Find(id);
            if (transaction_Type == null)
            {
                return HttpNotFound();
            }
            return View(transaction_Type);
        }

        // POST: Transaction_Type/Edit/5
        // To protect from overposting attacks, please enable the specific properties you want to bind to, for 
        // more details see http://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult Edit([Bind(Include = "Transaction_Type_ID,Transaction_Type1")] Transaction_Type transaction_Type)
        {
            if (ModelState.IsValid)
            {
                db.Entry(transaction_Type).State = EntityState.Modified;
                db.SaveChanges();
                return RedirectToAction("Index");
            }
            return View(transaction_Type);
        }

        // GET: Transaction_Type/Delete/5
        public ActionResult Delete(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            Transaction_Type transaction_Type = db.Transaction_Type.Find(id);
            if (transaction_Type == null)
            {
                return HttpNotFound();
            }
            return View(transaction_Type);
        }

        // POST: Transaction_Type/Delete/5
        [HttpPost, ActionName("Delete")]
        [ValidateAntiForgeryToken]
        public ActionResult DeleteConfirmed(int id)
        {
            Transaction_Type transaction_Type = db.Transaction_Type.Find(id);
            db.Transaction_Type.Remove(transaction_Type);
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
