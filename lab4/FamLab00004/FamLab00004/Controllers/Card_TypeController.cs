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
    public class Card_TypeController : Controller
    {
        private Lab4Entities db = new Lab4Entities();

        // GET: Card_Type
        public ActionResult Index()
        {
            return View(db.Card_Type.ToList());
        }

        // GET: Card_Type/Details/5
        public ActionResult Details(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            Card_Type card_Type = db.Card_Type.Find(id);
            if (card_Type == null)
            {
                return HttpNotFound();
            }
            return View(card_Type);
        }

        // GET: Card_Type/Create
        public ActionResult Create()
        {
            return View();
        }

        // POST: Card_Type/Create
        // To protect from overposting attacks, please enable the specific properties you want to bind to, for 
        // more details see http://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult Create([Bind(Include = "Card_Type_ID,Card_Type1")] Card_Type card_Type)
        {
            if (ModelState.IsValid)
            {
                db.Card_Type.Add(card_Type);
                db.SaveChanges();
                return RedirectToAction("Index");
            }

            return View(card_Type);
        }

        // GET: Card_Type/Edit/5
        public ActionResult Edit(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            Card_Type card_Type = db.Card_Type.Find(id);
            if (card_Type == null)
            {
                return HttpNotFound();
            }
            return View(card_Type);
        }

        // POST: Card_Type/Edit/5
        // To protect from overposting attacks, please enable the specific properties you want to bind to, for 
        // more details see http://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult Edit([Bind(Include = "Card_Type_ID,Card_Type1")] Card_Type card_Type)
        {
            if (ModelState.IsValid)
            {
                db.Entry(card_Type).State = EntityState.Modified;
                db.SaveChanges();
                return RedirectToAction("Index");
            }
            return View(card_Type);
        }

        // GET: Card_Type/Delete/5
        public ActionResult Delete(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            Card_Type card_Type = db.Card_Type.Find(id);
            if (card_Type == null)
            {
                return HttpNotFound();
            }
            return View(card_Type);
        }

        // POST: Card_Type/Delete/5
        [HttpPost, ActionName("Delete")]
        [ValidateAntiForgeryToken]
        public ActionResult DeleteConfirmed(int id)
        {
            Card_Type card_Type = db.Card_Type.Find(id);
            db.Card_Type.Remove(card_Type);
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
